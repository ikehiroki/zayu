<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Principle'), ['action' => 'edit', $principle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Principle'), ['action' => 'delete', $principle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $principle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Principles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Principle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="principles view large-9 medium-8 columns content">
    <h3><?= h($principle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $principle->has('user') ? $this->Html->link($principle->user->id, ['controller' => 'Users', 'action' => 'view', $principle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Article') ?></th>
            <td><?= h($principle->article) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($principle->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($principle->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($principle->modified) ?></td>
        </tr>
    </table>
</div>
