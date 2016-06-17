<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['controller' => 'Users', 'action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="principles index large-9 medium-8 columns content">
    <h2><?= h($user->email) ?> さんは「<?= $user->principle->article ?>」</h2>
    <h3>みんなの座右の銘</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('article') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($principles as $principle): ?>
            <tr>
                <td><?= h($principle->article) ?></td>
                <td><?= h($principle->user->email) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
