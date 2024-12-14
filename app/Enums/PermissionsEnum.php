<?php

namespace App\Enums;

enum PermissionsEnum
{
    //PRODUCT
    case PRODUCTS_VIEW;
    case PRODUCTS_CREATE;
    case PRODUCTS_UPDATE;
    case PRODUCTS_DELETE;

    //CATEGORY
    case CATEGORY_VIEW;
    case CATEGORY_CREATE;
    case CATEGORY_UPDATE;
    case CATEGORY_DELETE;

    //SUBCATEGORY
    case SUB_CATEGORY_VIEW;
    case SUB_CATEGORY_CREATE;
    case SUB_CATEGORY_UPDATE;
    case SUB_CATEGORY_DELETE;

    //TAG
    case TAGS_VIEW;
    case TAGS_CREATE;
    case TAGS_UPDATE;
    case TAGS_DELETE;


    //FILTER
    case FILTER_VIEW;
    case FILTER_CREATE;
    case FILTER_UPDATE;
    case FILTER_DELETE;
}
