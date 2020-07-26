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
        'sortedPrice'
    ]; 
     protected $drinksList;

    protected function init ()
    {
        parent::init();
        $this->drinksList = Drink::get();
    }

    public function sortedDate(HTTPRequest $r)
    {
    }
    public function sortedPrice(HTTPRequest $r)
    {
        // $year = $r->param('ID');
        // $month = $r->param('OtherID');

        // if(!$year) return $this->httpError(404);

        // $startDate = $month ? "{$year}-{$month}-01" : "{$year}-01-01";

        // if(strtotime($startDate) === false) {
        //     return $this->httpError(404, 'Invalid date');
        // }

        // $adder = $month ? '+1 month' : '+1 year';
        // $endDate = date('Y-m-d', strtotime(
        //     $adder,
        //     strtotime($startDate)
        // ));

         $this->drinksList = $this->drinksList->sort('Price DESC');
         echo $this->drinksList;

        // return [
        //     'StartDate' => DBField::create_field('Datetime', $startDate),
        //     'EndDate' => DBField::create_field('Datetime', $endDate)
        // ];
         return [
            'SortedByPrice' => 'SortedByPrice'
        ];
    }
     public function PaginatedDrinks()
    {

        return PaginatedList::create(
            $this->drinksList,
            $this->getRequest()
        ) 
        ->setPageLength(6)
        ->setPaginationGetVar('s');
    }
}