<?php

require_once("classes/Banner.php");
require_once("classes/Livro.php");

$carousel = [
    new Banner(
        "Novidade",
        "Senhora do Amor e da Guerra",
        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fuga excepturi consequatur, maxime eum sapiente a? Placeat, temporibus rem quas recusandae, sapiente voluptas fugiat dignissimos fuga modi numquam sunt, culpa ex! Natus dolor eveniet ducimus possimus mollitia nihil molestiae, porro dolore.",
        "imgs/desktop/cabecalho1.jpg"
    ),
    new Banner(
        "",
        "O CARACOL ESTRÁBICO",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus ullam eos necessitatibus sequi aut enim accusamus! Quaerat vero eum quos eveniet nisi tempora non qui natus officiis! Perferendis voluptas autem dolorem voluptatum inventore aperiam cum cumque laborum.",
        "imgs/desktop/cabecalho2.jpg"
    ),
    new Banner(
        "",
        "O COLECCIONADOR DE AMNÉSIAS",
        "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem molestias dolorum dolore veniam aspernatur, delectus commodi pariatur! Iure, maiores. Assumenda deleniti inventore esse in voluptatem ut veritatis? Fugiat reiciendis fugit dolore unde pariatur assumenda voluptatibus quas beatae illum, inventore!",
        "imgs/desktop/cabecalho3.jpg"
    ),
    new Banner(
        "",
        "O VELHO QUE PENSAVA QUE FUGIA",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis est cumque delectus, quis assumenda, labore quod architecto mollitia nobis molestias, dolorem laborum? Nobis debitis perspiciatis quibusdam doloremque, tempora autem. Laudantium, iste distinctio totam doloremque maiores nihil aspernatur unde vero?",
        "imgs/desktop/cabecalho4.jpg"
    )
    ];

$carousel_mobile = [
    new Banner(
        "Novidade",
        "Senhora do Amor e da Guerra",
        "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fuga excepturi consequatur, maxime eum sapiente a? Placeat, temporibus rem quas recusandae, sapiente voluptas fugiat dignissimos fuga modi numquam sunt, culpa ex! Natus dolor eveniet ducimus possimus mollitia nihil molestiae, porro dolore.",
        "imgs/mobile/cabecalho1.jpg"
    ),
    new Banner(
        "",
        "O CARACOL ESTRÁBICO",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus ullam eos necessitatibus sequi aut enim accusamus! Quaerat vero eum quos eveniet nisi tempora non qui natus officiis! Perferendis voluptas autem dolorem voluptatum inventore aperiam cum cumque laborum.",
        "imgs/mobile/cabecalho2.jpg"
    ),
    new Banner(
        "",
        "O COLECCIONADOR DE AMNÉSIAS",
        "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem molestias dolorum dolore veniam aspernatur, delectus commodi pariatur! Iure, maiores. Assumenda deleniti inventore esse in voluptatem ut veritatis? Fugiat reiciendis fugit dolore unde pariatur assumenda voluptatibus quas beatae illum, inventore!",
        "imgs/mobile/cabecalho3.jpg"
    ),
    new Banner(
        "",
        "O VELHO QUE PENSAVA QUE FUGIA",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis est cumque delectus, quis assumenda, labore quod architecto mollitia nobis molestias, dolorem laborum? Nobis debitis perspiciatis quibusdam doloremque, tempora autem. Laudantium, iste distinctio totam doloremque maiores nihil aspernatur unde vero?",
        "imgs/mobile/cabecalho4.jpg"
    )
    ];

    $livros = [
        new Livro (
            "SENHORA DO AMOR E DA GUERRA",
            "Uruk, Mesopotâmia, 3000 a.C. Séculos antes do famoso Gilgamesh, uma bela mulher aparece a
            comandar os destinos da maior cidade do mundo. <br>
            Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a
            coragem, o poder
            de sedução que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção
            dos sacerdotes
            de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o
            reino das
            trevas, vitimada pela pestilência, após inundações que cobriram a terra como após
            um dilúvio bíblico...
            <br><br>
            As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade
            maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da
            escrita.
            <br><br><br>

            Edição: Junho de 2020 <br>
            Dimensões: 150 x 230 x 10mm <br>
            Encadernação: Capa mole <br>
            Páginas: 240",
            "imgs/desktop/livro-conteudo.jpg"
        ),
        new Livro(
            "O COLECCIONADOR DE AMNÉSIAS",
            "Um lapso de memória, um acidente na fábrica… O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, 
            lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada… Decide pois 
            reformar-se e realizar o seu sonho de sempre: escrever um romance.
            Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como grãos de areia… Até ao dia mágico em 
            que, numa tabacaria em Pedrouços, repara num livrinho de absurdos com um título extraordinário:<br> Memórias de um amnésico. E embora 
            sinta que o título lhe foi roubado, ao mesmo tempo já sabe o que vai escrever.<br>
            Agora trabalha com método. De manhã escreve o passado, aquilo que lhe aconteceu desde o acidente na fábrica, com que se iniciou aquilo 
            a que chama o resto da sua vida. À noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele.<br>
            Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situações aqui narradas, nestes 
            momentos de ternura, nestes momentos de humor, nestes momentos de tristeza e solidão que fazem o percurso de um homem, desde os tempos 
            em que, embora já atingido pela doença, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de 
            Alzheimer.<br>
            - Manuela Morais, Associação Alzheimer Portugal <br><br>
            Os direitos do autor revertem para Alzheimer Portugal",
            "imgs/desktop/livro-conteudo2.jpg"
        ),
        new Livro(
            "O CARACOL ESTRÁBICO",
            "Xana desistiu por fim de repelir as atenções de um celibatário de meia idade que lhe apareceu na loja. Este não imagina a surpresa 
            que o aguarda... <br><br>
            Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe… <br><br>
            Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar...<br><br>
            Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia 
            por engano, a cegonha o depositou. <br><br>
            O velho professor tenta assegurar-se de que está vivo. <br><br>
            Um pai extraviado telefona à filha dias depois de esta receber a herança. <br><br>
            Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo 
            aniversário…<br><br>
            Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu…<br><br>
            Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe.<br><br>
            O que poderá impedir um sem-abrigo de atingir a glória?<br><br>
            Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher.<br><br>
            Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica.<br> Infelizmente, como a História não se cansa de 
            demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater.
            <br><br><br>

            Edição: Agosto de 2011 <br>
            Dimensões: 143 x 220 x 14 mm <br>
            Encadernação: Capa mole <br>
            Páginas: 159",
            "imgs/desktop/livro-conteudo3.jpg"
        ),
        new Livro(
            "O VELHO QUE PENSAVA QUE FUGIA",
            "Um homem de 83 anos aparece diante do prédio onde era o seu luxuoso apartamento. E vai-se lembrando.<br>
            Aos poucos o leitor é levado a perceber que o homem fugiu do lar onde esteve durante 18 meses, encarcerado pela família e controlado 
            por drogas, com o pretexto de ser esquizofrénico e não querer largar o comando dos negócios familiares. <br>
            O velho sobe o 8º andar, agora ocupado pelo filho, confronta a família, e vai-se recordando de mais coisas. O leitor fica a saber
            como foi que ele conseguiu fugir, e quais os planos dele. <br><br>
            De madrugada o velho volta a escapar e seguimos com detalhe as peripécias da sua fuga, sempre um passo adiante de perseguidores reais
            ou imaginários. <br>
            A fuga trá-lo a uma aldeia turística em França onde se refugia e se apaixona, assombrado por fantasmas e suspeitas.<br>
            Então...
            <br><br><br>

            Edição: Novembro de 2017 <br>
            Dimensões: 141393 x 218 x 13 mm <br>
            Encadernação: Capa mole <br>
            Páginas: 168",
            "imgs/desktop/livro-conteudo4.jpg"
        )

    ];

?>