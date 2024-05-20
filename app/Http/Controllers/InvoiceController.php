<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
 * As a freelancer I want to be able to do the following
 * -- See a list of all my invoices
 * -- Create a new invoice
 * -- -- Some invoice details can be quickly selected by selecting an invoice profile
 * -- -- An user profile can be created while creating a new invoice (you can quick save your settings)
 * -- -- The following invoice details are necessary:
 * -- -- -- Full name
 * -- -- -- Address
 * -- -- -- Hours worked
 * -- -- -- Where the hours are worked on
 * -- -- -- Hourly wage
 * -- -- -- Calculate the total based on the hourly wage
 * -- Store the invoice
 * -- Edit the invoice
 * -- Update the invoice
 * -- Delete the invoice
 *
 */
class InvoiceController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
