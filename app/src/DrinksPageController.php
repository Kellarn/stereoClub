<?php

namespace StereoClub\Drinks;

use PageController;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FormAction;
use SilverStripe\ORM\ArrayLib;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\ORM\PaginatedList;

class DrinksPageController extends PageController
{
     public function index(HTTPRequest $request)
    {
        $drinks = Drink::get();

        $paginatedDrinks = PaginatedList::create(
            $drinks,
            $request
        ) 
        ->setPageLength(6)
        ->setPaginationGetVar('s');

        return [
            'Results' => $paginatedDrinks
        ];
    }

}