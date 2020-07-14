<?php

namespace StereoClub\Drinks;

use SilverStripe\Forms\DateField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\CurrencyField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\ArrayLib;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TabSet;
use SilverStripe\Versioned\Versioned;

class Drink extends DataObject
{

    private static $db = [
        'Title' => 'Varchar',
        'Price' => 'Currency',
        'Description' => 'Text',
    ];


    private static $has_one = [
        'PrimaryPhoto' => Image::class,
        'DrinksPage' => DrinksPage::class,
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Description' => 'Description',
        'Price.Nice' => 'Price',
    ];

    private static $owns = [
        'PrimaryPhoto',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $versioned_gridfield_extensions = true;

    // public function searchableFields()
    // {
    //     return [
    //         'Title' => [
    //             'filter' => 'PartialMatchFilter',
    //             'title' => 'Title',
    //             'field' => TextField::class,
    //         ],
    //         'RegionID' => [
    //             'filter' => 'ExactMatchFilter',
    //             'title' => 'Region',
    //             'field' => DropdownField::create('RegionID')
    //                 ->setSource(
    //                     Region::get()->map('ID','Title')
    //                 )
    //                 ->setEmptyString('-- Any region --')
    //         ],
    //         'FeaturedOnHomepage' => [
    //             'filter' => 'ExactMatchFilter',
    //             'title' => 'Only featured'
    //         ]
    //     ];
    // }

    public function getCMSfields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title'),
            TextareaField::create('Description'),
            CurrencyField::create('Price'),
        ]);
        $fields->addFieldToTab('Root.Photos', $upload = UploadField::create(
            'PrimaryPhoto',
            'Primary photo'
        ));

        $upload->getValidator()->setAllowedExtensions(array(
            'png','jpeg','jpg','gif'
        ));
        $upload->setFolderName('drink-photos');

        return $fields;
    }
}