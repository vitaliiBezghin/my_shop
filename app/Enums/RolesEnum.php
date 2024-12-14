<?php

namespace App\Enums;

enum RolesEnum
{
    case CUSTOMER;
    case ADMIN;
    case ACCOUNTANT;
    case EMPLOYEE;
    case CONTENT_MANAGER;

    case SUPER_ADMIN;
}
