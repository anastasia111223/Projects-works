<template>
    <nav>
        <router-link v-for="link in links" :key="link.path"
        :to="link.path" class="nav">
        {{ link.title }}
        </router-link>
    </nav>
</template>

<script>
export default {
    props: {
        links: {
            required: true,
            type: Array,
            validator(value){
                if (value.length < 1) return false;
                if (!value.every((item) => "title" in item && "path" in item)) return false;
                return true;
            }
        }
    }
}
</script>
<style>
.nav {
    display: block;
    padding: 10px;
    margin: 10px;
    text-transform: uppercase;
    text-decoration: none;
    color: rgb(189, 29, 29);
    /* background-color: rgb(226, 134, 134); */
    border: 2px solid rgb(189, 17, 17);
}
</style>