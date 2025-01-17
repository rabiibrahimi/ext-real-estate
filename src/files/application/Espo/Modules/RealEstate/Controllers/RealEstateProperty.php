<?php
/************************************************************************
 * This file is part of Real Estate extension for EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2022 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * Real Estate extension is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Real Estate extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Modules\RealEstate\Controllers;

use Espo\Core\Exceptions\BadRequest;

class RealEstateProperty extends \Espo\Core\Templates\Controllers\Base
{
    public function postActionSetNotInterested($params, $data, $request)
    {
        if (empty($data->requestId) || empty($data->propertyId)) {
            throw new BadRequest();
        }

        $this->getRecordService()->setNotIntereseted($data->propertyId, $data->requestId);

        return true;
    }

    public function postActionUnsetNotInterested($params, $data, $request)
    {
        if (empty($data->requestId) || empty($data->propertyId)) {
            throw new BadRequest();
        }

        $this->getRecordService()->unsetNotIntereseted($data->propertyId, $data->requestId);

        return true;
    }
}
