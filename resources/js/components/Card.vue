<template>
    <ul class="row">
        <li v-for="(comic,index) in comics" :key="comic.index" class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
            <div class="info_category">
                <img :src="comic['image-cover']" alt="">
                <span>{{comic.category.name}}</span>
            </div>
            <span style="color: white; font-weight: bold;" class="d-block mt-2">{{comic.title}}</span>
            <p style="color: white;">{{comic.price}} €</p>
        </li>
    </ul>
</template>

<script>
export default {
    name:"Card",
    props: {
        comics: {
            type: Array,
            required: true
        }
    }
}
</script>

<style lang="scss">
    li {

        .info_category {
            position: relative;

            img {
                width: 100%;
            }

            span {
                position: absolute;
                left: 0;
                top: 0;
                background: #0282F9;
                font-size: 15px;
                font-weight: bold;
                padding: 2px 5px;
                color: #fff;
            }
        }
    }
</style>