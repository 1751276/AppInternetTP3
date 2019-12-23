<?php
$urlToReviewsAutocompletedemoJson = $this->Url->build([
    "controller" => "Reviews",
    "action" => "findReviews",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToReviewsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Reviews/autocompletedemo', ['block' => 'scriptBottom']);
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>

<div class="reviews form large-9 medium-8 columns content">
    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Edit Review') ?></legend>
        <?php
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('name', ['id' => 'autocomplete']);
            echo $this->Form->control('review');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
