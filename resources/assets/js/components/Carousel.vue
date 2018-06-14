<template>
    
    <div>
        <slot></slot>
    </div>
</template>

<script>
    import flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';

    export default {
        props : {
            wraparound : { default : true },
            autoplay : { default : false }
        },

        mounted() {
            var flkty = new flickity(this.$el, {
                wrapAround : this.wraparound,
                autoPlay : this.autoplay,
                cellAlign : 'left',
                contain : true,
            });
        }
    }
</script>
