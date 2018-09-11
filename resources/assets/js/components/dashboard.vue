<template>
    <div class="container mt-3">

        <div class="card mb-4">
            <div class="card-body">
                <h1 class="card-title">Dashboard</h1>
                <p class="card-text">Hello, Welcome to your SPA dashboard</p>
            </div>
        </div>

        <passport-clients class="mb-4"></passport-clients>
        <passport-authorized-clients class="mb-4"></passport-authorized-clients>
        <passport-personal-access-tokens class="mb-4"></passport-personal-access-tokens>

    </div>
</template>

<script>
    export default {
        data(){
            return {
            }
        }
    }
</script>
