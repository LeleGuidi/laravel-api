<template>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Blog</h1>
                </div>
                <div class="col-6">
                    <nav class="header_navbar">
                        <ul class="navbar-nav">
                            <li>Ciao</li>
                            <li>CIao</li>
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
        align-items: center;
    }
    h1 {
        text-transform: uppercase;
        font-size: 3.75rem;
    }
    ul {
        display: flex;
        list-style: none;
        gap: .625rem;
        font-size: 1.25rem;
    }
}
</style>