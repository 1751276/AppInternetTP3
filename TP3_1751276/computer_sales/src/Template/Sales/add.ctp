<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Categories",
    "action" => "getCategories",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Sales/add', ['block' => 'scriptBottom']);
?>

<div class="sales form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="CategoriesController">
    <?= $this->Form->create($sale) ?>
    <fieldset>
        <legend><?= __('Add Sale') ?></legend>
        <div>
            Type: 
            <select name="Category_id"
                    id="category-id" 
                    ng-model="category" 
                    ng-options="category.name for category in categories track by category.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Product: 
            <select name="subcategory_id"
                    id="subcategory-id" 
                    ng-disabled="!category" 
                    ng-model="subcategory"
                    ng-options="subcategory.name for subcategory in category.subcategories track by subcategory.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <?php
        echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save Sale')) ?>
    <?= $this->Form->end() ?>
</div>