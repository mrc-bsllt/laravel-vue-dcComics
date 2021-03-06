<template>
    <div class="main">
        <div class="container">
            <ul class="row text-center">
                <li v-for="(comic,index) in comics" :key="comic.index" class="col-12 col-sm-6 col-md-4 my-3">
                    <img :src="comic['image-cover']" alt="">
                    <h3 style="color: white;" class="my-2">{{comic.title}}</h3>
                    <p style="color: white;" class="my-3">{{comic.price}} €</p>
                </li>
            </ul>
        </div>
    </div> 
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            comics: [],
            comicsURL: "http://127.0.0.1:8000/api/comics"
        }
    },
    mounted() {
        this.getComics();
    },
    methods: {
        getComics: function() {
            //get all comics
            axios
            .get(this.comicsURL)
            .then((response) => {
                    console.log(response.data);
                    this.comics = response.data;
                }
            );
        }
    }
}
</script>

<style lang="scss" scoped>
    .main {
        background-color: rgb(36, 36, 36);

        .container {

            li {
                img {
                    width: 100%;
                }
            }
        }
    }    
</style>>
