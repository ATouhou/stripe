<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    1.0.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Api;

class Cards extends Api
{
    /**
     * Creates a new card on the given customer.
     *
     * @param  string  $customerId
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function create($customerId, array $parameters = [])
    {
        return $this->_post("customers/{$customerId}/cards", $parameters);
    }

    /**
     * Retrieves an existing card from the given customer.
     *
     * @param  string  $customerId
     * @param  string  $cardId
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function find($customerId, $cardId)
    {
        return $this->_get("customers/{$customerId}/cards/{$cardId}");
    }

    /**
     * Updates an existing card from the given customer.
     *
     * @param  string  $customerId
     * @param  string  $cardId
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function update($customerId, $cardId, array $parameters = [])
    {
        return $this->_post("customers/{$customerId}/cards/{$cardId}", $parameters);
    }

    /**
     * Deletes an existing card from the given customer.
     *
     * @param  string  $customerId
     * @param  string  $cardId
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function delete($customerId, $cardId)
    {
        return $this->_delete("customers/{$customerId}/cards/{$cardId}");
    }

    /**
     * Lists all cards from the given customer.
     *
     * @param  string  $customerId
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function all($customerId, array $parameters = [])
    {
        return $this->_get("customers/{$customerId}/cards", $parameters);
    }
}
