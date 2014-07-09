## Credit Cards

### Retrieve all the attached cards

Listing the attached cards from an entity is very easy.

```php
$user = User::find(1);

$cards = $user->cards;
```

### Attaching credit cards

Attach a new credit card to the entity.

```php
$token = Input::get('stripeToken');

$user = User::find(1);

$user
	->card()
	->create($token);
```

Attach a new credit card to the entity and make it the default credit card.

```php
$token = Input::get('stripeToken');

$user = User::find(1);

$user
	->card()
	->makeDefault()
	->create($token);
```

### Updating credit cards

Update a credit card.

```php
$user = User::find(1);

$attributes = [
	'name' => 'John Doe',
];

$user
	->card(10)
	->update($attributes);
```

Make an existing credit card the default credit card.

```php
$user = User::find(1);

$user
	->card(10)
	->setDefault();
```

### Deleting credit cards

```php
$user = User::find(1);

$user
	->card(10)
	->delete();
```

### Get the entity default Credit Card

```php
$user = User::find(1);

$card = $user->getDefaultCard();

echo $card->last_four;
```

### Update the entity default Credit Card

```php
$token = Input::get('stripeToken');

$user = User::find(1);

$user->updateDefaultCard($token);
```

### Check if the entity has any active card

```php
$user = User::find(1);

if ( ! $user->hasActiveCard())
{
echo "User doesn't have any active credit card!";
}

### Sync data from Stripe

Often you might have the need to sync the data from Stripe with your database, we have an easy way to achieve this.

```php
$user = User::find(1);

$user
	->card()
	->syncWithStripe();
```

> **Note:** You can pass a card id `integer` or a `Cartalyst\Stripe\Billing\Models\IlluminateCard` object through the `card()` method.
