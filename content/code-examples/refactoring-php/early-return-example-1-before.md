```php
public function calculateScore(User $user): int
{
    if ($user->inactive) {
        $score = 0;
    } else {
        if ($user->hasBonus) {
            $score = $user->score + $this->bonus;
        } else {
            $score = $user->score;
        }
    }

    return $score;
}
```
