<template>
    <div class="main">
        <div class="container">
            <Card :comics="comics"/>
        </div>
    </div> 
</template>

<script>
import Card from './components/Card'

export default {
    name: 'App',
    components: {
        Card
    },
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
        background-color: rgb(31, 31, 31);
    }    
</style>>
