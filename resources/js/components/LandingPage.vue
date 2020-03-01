<template>
    <div class="container">
        <!-- {{cards}} -->
        <div class="row ">
            <div class="row col-10">
                <card class="col-4" v-for="card in cards" :card="card" :key="card.id"></card>

            </div>
            <div class="row col-2">   
                <p>test</p>
            </div>
        </div>
      
    </div>
</template>

<script>
    import Card from './partials/Card'
    export default {
        props : { 
            cards : Array,

            },
        components : {
            Card, 
        } // Card in component should be like in import, register it lie it
    }
</script>
