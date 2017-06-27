<?php
/**
  * @var \App\View\AppView $this
  */
    use Cake\Routing\Router;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Add Emprestimo') ?></legend>
        <?php
            echo $this->Form->control('livro_id', ['options' => $livros]);
            echo $this->Form->control('id_usuario', ['options' => $users]);
            echo $this->Form->control('identificador_livro', ['type' => 'text', 'class' => 'typeahead']);
            echo $this->Form->control('data_emprestimo');
            echo $this->Form->control('data_entrega', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">

    // var substringMatcher = function(strs) {
   
    //   return function findMatches(q, cb) {
    //     var matches, substringRegex;

        
    //     matches = [];

        
    //     substrRegex = new RegExp(q, 'i');

        
    //     $.each(strs, function(i, str) {
    //       if (substrRegex.test(str)) {
    //         matches.push(str);
    //       }
    //     });

    //     cb(matches);
    //   };
    // };

    // var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
    //   'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    //   'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
    //   'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
    //   'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    //   'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
    //   'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
    //   'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    //   'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    // ];

    $('.typeahead').on('keyup', function(evt) {
        var value = $(this).val();
        $.get('<?php echo Router::url(array('controller' => 'Emprestimos', 'action' => 'busca_id')); ?>/' + value + '/' + $('#livro-id').val(), function(data) {
            var options = JSON.parse(data);
            
        })
    });

    // var identificador = new Bloodhound({
    //   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    //   queryTokenizer: Bloodhound.tokenizers.whitespace,
    //   // prefetch: '../data/films/post_1960.json',
    //   remote: {
    //     url: '<?php echo Router::url(array('controller' => 'Emprestimos', 'action' => 'busca_id')); ?>/%QUERY',
    //     wildcard: '%QUERY'
    //   }
    // });

    // $('.typeahead').typeahead({
    //   hint: true,
    //   highlight: true,
    //   minLength: 1
    // },
    // {
    //   name: 'states',
    //   display: 'value',
    //   // source: substringMatcher(states)
    //   source: identificador
    // });
</script>
