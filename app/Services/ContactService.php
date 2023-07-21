<?php
// app/Services/ContactService.php
namespace App\Services;

use App\Models\ContactModel;

class ContactService
{
    public function getAllContacts()
    {
        return ContactModel::all();
    }

    // You can add more methods here to handle specific data retrieval or business logic related to contacts.
}
