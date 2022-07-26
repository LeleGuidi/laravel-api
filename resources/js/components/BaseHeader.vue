<template>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h1>Blog</h1>
                </div>
                <div class="col-9">
                    <nav class="header_navbar">
                        <ul>
                            <li></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'BaseHeader',
}
</script>

<style lang="scss">
header {
    .row {
        justify-content: space-between;
        display: flex;
        align-items: center;
    }
    h1 {
        text-transform: uppercase;
        font-size: 3.75rem;
    }
    &_navbar {
        display: flex;

        ul {
            display: flex;
        }
    }
}
</style>