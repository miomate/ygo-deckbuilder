<template>
<!-- card  bootstrap class -->
<!-- px-2 vs p-2 -->
    <div class="container p-2" style="width: 18rem;">
        <!-- {{card.card_images[0].image_url}} -->
        <img class="card-img-top" :src="card.card_images[0].image_url" alt="Card image cap">
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">{{card.name}}</h5> -->
            <!-- <p class="card-text">{{card.desc}}</p> -->
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <!-- </div> -->
    </div>
</template>

<script>
    export default {
        props : { 
            card : Object,
            }
    }
</script>
