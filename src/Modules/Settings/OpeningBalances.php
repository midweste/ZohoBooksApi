<?php

namespace Webleit\ZohoBooksApi\Modules\Settings;

use Illuminate\Support\Collection;
use Webleit\ZohoBooksApi\Models\Settings\OpeningBalance;
use Webleit\ZohoBooksApi\Modules\Module;

/**
 * Class OpeningBalances
 * @package Webleit\ZohoBooksApi\Modules
 */
class OpeningBalances extends Module
{
    /**
     * @return string
     */
    public function getUrlPath()
    {
        return 'settings/openingbalances';
    }

    /**
     * @return string
     */
    public function getModelClassName()
    {
        return OpeningBalance::class;
    }

    /**
     * @return string
     */
    public function getResourceKey()
    {
        return 'opening_balance';
    }

    /**
     * @return Collection
     */
    public function getList($params = [])
    {
        return new Collection([$this->get(null)]);
    }

    /**
     * @param string $id
     * @param array $params
     * @return \Webleit\ZohoBooksApi\Models\Model
     */
    public function get ($id, array $params = [])
    {
        return parent::get($id, $params); // TODO: Change the autogenerated stub
    }

    /**
     * Update a record for this module
     * @param string $id
     * @param array $data
     * @param array $params
     * @return Model
     */
    public function update($id, $data, $params = [])
    {
        if (!isset($data['opening_balance_id'])) {
            $data['opening_balance_id'] = $id;
        }
        // unlike most(all?) other update endpoints, the url is not added to the path
        // this is likely because there is only one openingbalances record w multiple accounts
        // https://www.zoho.com/books/api/v3/opening-balance/#update-opening-balance
        $data = $this->client->call($this->getUrl(), 'PUT', $data, $params);
        $data = $data[$this->inflector->singularize($this->getResourceItemKey())];

        return $this->make($data);
    }

}
