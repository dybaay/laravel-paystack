<?php

namespace Iamolayemi\Paystack\Endpoints;

class TransferRecipient extends Endpoint
{
    protected const ENDPOINT = '/transferrecipient';

    /**
     * Creates a new recipient.
     *
     * @param array $payload
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-create
     */
    public function create(array $payload): self
    {
        $this->post($this->url(self::ENDPOINT), $payload);
        return $this;
    }

    /**
     * Creates a new recipient.
     *
     * @param array $payload
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-bulk
     */
    public function createBulk(array $payload): self
    {
        $this->post($this->url(self::ENDPOINT). '/bulk',  $payload);
        return $this;
    }

    /**
     * List transfer recipients available on your integration.
     *
     * @param array $query
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-list
     */
    public function list(array $query = []): self
    {
        $this->get($this->url(self::ENDPOINT), $query);
        return $this;
    }

    /**
     * Fetch the details of a transfer recipient.
     *
     * @param string $customer_email
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-fetch
     */
    public function fetch(string $customer_email): self
    {
        $this->get($this->url(self::ENDPOINT) . '/' . $customer_email);
        return $this;
    }

    /**
     * Update an existing recipient.
     *
     * @param string $recipient_code
     * @param array $payload
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-update
     */
    public function update(string $recipient_code, array $payload = []): self
    {
        $this->put($this->url(self::ENDPOINT) . '/' . $recipient_code, $payload);
        return $this;
    }

    /**
     * Deletes a transfer recipient (sets the transfer recipient to inactive).
     *
     * @param string $recipient_code
     * @return TransferRecipient
     * @link https://paystack.com/docs/api/#transfer-recipient-delete
     */
    public function deactivate(string $recipient_code): self
    {
        $this->delete($this->url(self::ENDPOINT) . '/' . $recipient_code);
        return $this;
    }
}