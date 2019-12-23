<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsTag $productsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Tag'), ['action' => 'edit', $productsTag->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Tag'), ['action' => 'delete', $productsTag->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsTag->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsTags view large-9 medium-8 columns content">
    <h3><?= h($productsTag->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsTag->has('product') ? $this->Html->link($productsTag->product->name, ['controller' => 'Products', 'action' => 'view', $productsTag->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $productsTag->has('tag') ? $this->Html->link($productsTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $productsTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsTag->id) ?></td>
        </tr>
    </table>
</div>
