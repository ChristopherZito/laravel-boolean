<template>
    <div class="container py-5 bg-warning">
        <div class="border border-dark p-3" v-for="postcard in postcards" :key="postcard.id">
            <div>
                <span class="d-flex justify-content-around ">
                    <strong>{{postcard.sender}}</strong>
                    <i> {{postcard.reciver}}</i>
                </span>
            </div>
            <div>
                <p>{{postcard.text}}</p>
            </div>
            <div class="box">
                <img class="img-fluid" v-if="postcard.image" :src="'storage/myimage/' + postcard.image" >
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                postcards: [],
            }
        },
        mounted() {
            axios.get('/api/get/postcard')
            .then(r => {
                this.postcards = r.data;
                // console.log(this.postcards);
            })
            .catch(e => console.error(e))
        }
    }
</script>
