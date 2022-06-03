<!-- http://localhost/projet-php/jour5/01-question.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <!-- article.col-4*3>div>(h2>lorem4)+p>lorem15+button.btn.btn-primary>{voir} -->
        <div class="row">

        <?php for($i = 0 ; $i < 3 ; $i++) : ?>
        <article class="col-4">
            <div class="border rounded text-center p-4 mt-4">
                <h2>Lorem ipsum dolor sit.</h2>
                <p class="art">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, sed perferendis delectus cum numquam iusto quibusdam id quae dolore porro ab, doloremque esse. Voluptas sunt magnam voluptatum maiores laborum. Eius ab eum, incidunt quo molestias dolor eos? Veniam sed nobis, cum sunt dolore quisquam quasi atque officiis. Nesciunt velit esse hic quaerat deleniti? Adipisci, saepe ipsam sit inventore, facere voluptate sequi nulla pariatur nesciunt ea sed in ratione, vero rem quidem dolores magnam hic corrupti? Deleniti eligendi magni cum rem temporibus quibusdam obcaecati ipsa exercitationem aut fugiat quaerat officia aliquam, distinctio id rerum corporis praesentium facere consectetur. Modi doloribus, veritatis iusto saepe ratione accusantium atque earum debitis distinctio ipsa error obcaecati rerum cum magnam, nostrum odit sed mollitia voluptates. Hic odio quia provident illo nesciunt tenetur consectetur ut sit nulla possimus harum numquam, ducimus quibusdam, doloremque dicta quis ullam iure incidunt aperiam quaerat in cumque, id sapiente. Incidunt molestiae fuga laborum temporibus sint explicabo in aperiam, nisi quas placeat saepe ut, unde ea? Soluta molestiae voluptatem cumque nihil voluptatum recusandae, deleniti sapiente totam consectetur eveniet, atque dolorem delectus magnam quia, inventore odit architecto at incidunt vel provident ea. Laborum quam nihil quas in modi iste dolores sint incidunt eaque reiciendis!</p>
                <button class="btn btn-primary toggle">voir</button>
            </div>
        </article>
        <?php endfor ?>
        
        </div>
    </section>
    <script>
        /*  let toggle = document.querySelector(".toggle"); // ne sélectionner QUE le 1er bouton
        let art = document.querySelector(".art"); // ne sélectionne QUE le 1er p 
        toggle.addEventListener("click", () => {

                if(getComputedStyle(art).display != "none"){
                    art.style.display ="none";
                } else {
                    art.style.display = "block";
                }
            }) */


        let toggles = document.querySelectorAll(".toggle"); // [button , button, button]
        let arts = document.querySelectorAll(".art"); // [p,p,p]
        toggles.forEach(function(toggle, index){
            toggle.addEventListener("click", () => {
                if(getComputedStyle(arts[index]).display != "none"){
                    arts[index].style.display ="none";
                } else {
                    arts[index].style.display = "block";
                }
            })
        })
    </script>
</body>
</html>

<!-- $_GET["page"] -->