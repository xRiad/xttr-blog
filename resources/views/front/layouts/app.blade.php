<!DOCTYPE html>
<html lang="en">
<x-front.head/>
<body>
	<x-front.header/>
    <div class="container-fluid">
        <main class="tm-main">
            <x-front.search/>
            @yield('content')            
            <x-front.footer/>
        </main>
    </div>
</body>
</html>