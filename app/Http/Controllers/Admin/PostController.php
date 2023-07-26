<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\StatusModel;
use App\Models\TagModel;
use App\Models\PostTagModel;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::with('tags', 'category', 'status')->get();

        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = StatusModel::all();
        $categories = CategoryModel::all();
        $tags = TagModel::all();

        return view('admin.posts.create', ['statuses' => $statuses, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            $img = $request->img;
            $imgExtension = $img->getClientOriginalExtension();
            $spr = DIRECTORY_SEPARATOR;
            $uuid = Str::uuid();
            $imgName = "{$uuid}.{$imgExtension}";
            $imgPath = "app{$spr}public{$spr}images{$spr}{$imgName}";
            $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

            $post = new PostModel;
            $post->name = $request->name;
            $post->video = $request->video;
            $post->desc = $request->description;
            $post->img = "images{$spr}$imgName";
            $post->status_id = $request->status; 
            $post->category_id = $request->category;

            $post->visibility = $request->visibility;
            $post->author = $request->author;
            $post->date = Carbon::now()->format('F j, Y'); 

            $post->save();
            
            $tagIds = $request->tags;

            if(is_array($request->tags)) {
                foreach($tagIds as $tagId) {
                    $postTag = new PostTagModel;
                    $postTag->post_id = $post->id;
                    $postTag->tag_id = $tagId;
                    $postTag->save();
                }
            }

            return redirect()->back()->with('success', 'post has been saved successfully !');
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
    }

    /**
     * display the specified resource.
     */
    public function show(int $id)
    {

    }

    /**
     * show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $post = PostModel::with('tags', 'category', 'status')->findOrFail($id);

        $statuses = StatusModel::all();
        $categories = CategoryModel::all();
        $tags = TagModel::all();
        return view('admin.posts.edit', ['post' => $post,'statuses' => $statuses, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * update the specified resource in storage.
     */
    public function update(PostRequest $request, int $id)
    {
        try {
            $post = PostModel::with('tags')->findOrFail($id);


            $imgPath = 'app/public/images/' . $post->img;
            if (File::exists(storage_path($imgPath))) {
                File::delete(storage_path($imgPath));
            }

            $img = $request->img;
            $imgExtension = $img->getClientOriginalExtension();
            $imgName = time() . '.' . $imgExtension;
            $imgPath = 'app/public/images/' . $imgName;
            $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

            $post->name = $request->name;
            $post->video = $request->video ? $request->video : null;
            $post->desc = $request->desc;
            $post->img = $imgName;
            $post->status_id = $request->status ? $request->status : null; 
            $post->category_id = $request->category ? $request->category : null;

            $post->visibility = $request->visibility;
            $post->author = $request->author;

            $post->save();
            
            $tagIds = array_map('intval', $request->tags);

            $oldTagIds = $post->tags->pluck('id')->toArray();
             
            $tagDifferenceFromOld = array_diff($oldTagIds, $tagIds);
            $tagDifferenceFromNew = array_diff($tagIds, $oldTagIds);
            $tagDifference = array_merge($tagDifferenceFromOld, $tagDifferenceFromNew);

            if(is_array($request->tags)) {
                foreach($tagDifference as $tagId) {
                    if (in_array($tagId, $oldTagIds)) {
                        $postTag = PostTagModel::where('tag_id', '=', $tagId)->delete();
                    } elseif(!in_array($tagId, $oldTagIds)) {
                        $postTag = new PostTagModel;
                        $postTag->post_id = $post->id;
                        $postTag->tag_id = $tagId;
                        $postTag->save();
                    }
                }
            }

            return redirect()->back()->with('success', 'post has been saved successfully !');
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
    }

    /**
     * remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
            $post = PostModel::find($id);
            if ($post) {
                $imgPath = 'app/public/images/' . $post->img;

                if ($imgPath && File::exists(storage_path($imgPath))) {
                    File::delete(storage_path($imgPath));
                }

                $post->delete();

                return back();
            } else {
                return back()->with('error', 'Post not found.');
            }
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back();
    }
}
