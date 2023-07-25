cHeaderInner
<section class="s-blog">
    <div class="u-container">
        <ul>
            <li>
                <?php
                $cCardBlogPost = array(
                    "modifiers" => "",
                    "link" => "#post",
                    "title" => "Lorem ipsum dolor sit amet, consectetur.",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cumque dolores ipsam nemo nobis quia quis ratione saepe, similique. Architecto assumenda aut iusto nam nihil quae quis ullam voluptatibus.",
                    "categories" => array(
                        array("caption" => "Artigos", "link" => "#"),
                        array("caption" => "Dicas", "link" => "#")
                    ),
                    "date" => "09/03/2023",
                    "image" => "https://picsum.photos/600/400",
                    "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                    "author" => "Laures Ronak",
                    "author_pic" => "https://picsum.photos/80/80",
                );
                include('components/c-cardBlogPost/index.php');
                ?>
            </li>
        </ul>
    </div>
</section>