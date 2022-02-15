<template>
    <div class="container">
        Postcard
        <div v-for="postcard in postcards" :key="postcard.id">
            <div>
                <span> <strong>{{postcard.sender}}</strong> </span> - <span> {{postcard.reciver}} </span>
            </div>
            <div>
                <p>{{postcard.text}}</p>
                <span>
                    <!-- <img src="" alt=""> -->
                </span>
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
