<template>
    <div class="container">
        <div v-for="postcard in postcards" :key="postcard.id">
            <div>
                <span> <strong>{{postcard.sender}}</strong> </span> - <span> <i> {{postcard.reciver}}</i> </span>
            </div>
            <div>
                <p>{{postcard.text}}</p>
            </div>
            <div>
                <img v-if="postcard.image" :src="'storage/myimage/' + postcard.image" width="100px">
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
