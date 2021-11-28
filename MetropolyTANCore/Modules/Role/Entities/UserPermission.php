<?php

namespace Modules\Role\Entities;

abstract class UserPermission
{
    const global = "user";
    const create = self::global.":"."create";
    const read = self::global.":"."read";
    const update = self::global.":"."update";
    const delete = self::global.":"."delete";

}
