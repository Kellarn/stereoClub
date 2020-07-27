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
    private static $allowed_actions = [
        'sortedDate',
        'sortedPrice',
        'sortedName'
    ]; 
     protected $drinksList;

    protected function init ()
    {
        parent::init();
        $this->drinksList = Drink::get()->sort('Title ASC');
    }

    public function sortedDate(HTTPRequest $r)
    {
         $this->drinksList = $this->drinksList->sort('Date DESC');
         return [
            'SortedByDate' => 'Date'
        ];
    }
     public function sortedName(HTTPRequest $r)
    {
         $this->drinksList = $this->drinksList->sort('Title ASC');
         return [
            'SortedByName' => 'Title'
        ];
    }
    public function sortedPrice(HTTPRequest $r)
    {
         $this->drinksList = $this->drinksList->sort('Price DESC');
         return [
            'SortedByPrice' => 'Price'
        ];
    }
     public function PaginatedDrinks()
    {

        return PaginatedList::create(
            $this->drinksList,
            $this->getRequest()
        ) 
        ->setPageLength(9)
        ->setPaginationGetVar('s');
    }
}