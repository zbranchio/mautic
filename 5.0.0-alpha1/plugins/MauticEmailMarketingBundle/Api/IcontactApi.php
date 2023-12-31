<?php

namespace MauticPlugin\MauticEmailMarketingBundle\Api;

use Mautic\PluginBundle\Exception\ApiErrorException;

class IcontactApi extends EmailMarketingApi
{
    protected function request($endpoint, $parameters = [], $method = 'GET')
    {
        $url = sprintf('%s/%s/c/%s/%s', $this->integration->getApiUrl(), $this->keys['accountId'], $this->keys['clientFolderId'], $endpoint);

        $response = $this->integration->makeRequest($url, $parameters, $method, [
            'encode_parameters'    => 'json',
            'encoding_headers_set' => true,
        ]);

        if (is_array($response) && !empty($response['errors'])) {
            throw new ApiErrorException(implode(' ', $response['errors']));
        } else {
            return $response;
        }
    }

    /**
     * @return mixed|string
     *
     * @throws ApiErrorException
     */
    public function getLists()
    {
        return $this->request('lists');
    }

    /**
     * @return mixed|string
     *
     * @throws ApiErrorException
     */
    public function getCustomFields()
    {
        return $this->request('customfields');
    }

    /**
     * @param array $fields
     *
     * @return mixed|string
     *
     * @throws ApiErrorException
     */
    public function subscribeLead($listId, $fields)
    {
        $fields['status'] = 'normal';

        $contacts = $this->request('contacts', [$fields], 'POST');

        if (!empty($contacts['contacts'][0]['contactId'])) {
            $contactId = $contacts['contacts'][0]['contactId'];

            $fields = [
                'status'    => 'normal',
                'listId'    => $listId,
                'contactId' => $contactId,
            ];

            return $this->request('subscriptions', [$fields], 'POST');
        }

        return $contacts;
    }
}
