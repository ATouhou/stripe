### Application Fees

When you collect a transaction fee on top of a charge made for your user (using Stripe Connect), an application fee object is created in your account. You can list, retrieve, and refund application fees.

#### Refund an application fee

##### Arguments

Key    | Required | Type   | Default | Description
------ | -------- | ------ | ------- | -----------------------------------------
id     | true     | string | null    | The application fee unique identifier.
amount | true     | number | null    | A positive amount for the transaction.

```php
$fee = Stripe::fees()->refund([
	'id' => 'fee_4EUveQeJwxqxD4',
]);
```

#### Retrieve all the application fees

##### Arguments

Key            | Required | Type   | Default | Description
-------------- | -------- | ------ | ------- | ---------------------------------
charge         | false    | string | null    | Only return application fees for the charge specified by this charge ID.
created        | false    | string | null    | A filter on the list based on the object created field.
ending_before  | false    | string | null    | A cursor to be used in pagination.
limit          | false    | int    | 10      | A limit on the number of objects to be returned.
starting_after | false    | string | null    | A cursor to be used in pagination.

```php
$fees = Stripe::fees()->all();

foreach ($fees['data'] as $fee)
{
	var_dump($fee['id']);
}
```

#### Retrieve an existing fee

##### Arguments

Key | Required | Type   | Default | Description
--- | -------- | ------ | ------- | --------------------------------------------
id  | true     | string | null    | The application fee unique identifier.

```php
$fee = Stripe::fees()->find([
	'id' => 'fee_4EUveQeJwxqxD4',
]);

echo $fee['id'];
```
