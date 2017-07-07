<?php
/**
  * @var \App\View\AppView $this
  */
    use Cake\Routing\Router;
    // use Cake\ORM\TableRegistry;
?> 
<div class="container-fluid" id="actions-sidebar">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <!--li class="heading"><?= __('Actions') ?></li-->
                <li><?= $this->Html->link(__(' Listar Emprestimos'), ['action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Listar Livros'), ['controller' => 'Livros', 'action' => 'index'], ['class' => 'fa fa-server']) ?></li>
                <li><?= $this->Html->link(__(' Novo Livro'), ['controller' => 'Livros', 'action' => 'add'], ['class' => 'fa fa-plus-square']) ?></li>
        </ul>
    </div>
    <div class="col-sm-9 col-sm-6">
        <div class="placeholdered">
            <?= $this->Form->create($emprestimo) ?>
            <fieldset class="place">
                <legend class="font"><?= __('Adicionar Emprestimo') ?></legend>
                <?php
                    echo $this->Form->control('livro_id', ['options' => $livros]);
                    echo $this->Form->control('id_usuario', ['options' => $users]);
                    echo $this->Form->control('identificador_livro', ['options' => $livroFisico, 'placeholder' => 'Digite o id do livro']);
                    echo $this->Form->control('data_emprestimo', ['placeholder' => 'Digite a data do emprestimo']);
                    echo $this->Form->control('data_entrega',['placeholder' => 'Digite a data de entrega']);
                ?>
            </fieldset><br>
        <?= $this->Form->button(__('Submit'), ['type'=>'submit','class'=>'col-md-offset-5 col-md-2 btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
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

</div>
</div>
<style type="text/css">
    
    .place {
        font-size: 1.5em;
    }
    .font {
        text-align: center;
        font-size: 1.5em;
    }
    .placeholdered {
        font-size: 1.5em;
    }

</style>
