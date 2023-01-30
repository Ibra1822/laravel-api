<script>
export default {
    name: "SecondStep",
};
</script>
<template>
    <div class="second-step">
        <div class="step-left">
            <img
                src="https://www.byte-post.com/wp-content/uploads/2019/04/download.png"
                alt=""
            />
        </div>
        <div class="step-right">
            <div>
                <h2>Css</h2>
                <p>Lo stile in ogni pagina Web</p>
                <ul>
                    <li>
                        <a href="https://github.com/Ibra1822/html-css-booleaner"
                            >Html-Css-Booleaner</a
                        >
                    </li>
                    <li>
                        <a href="https://github.com/Ibra1822/html-css-toboolist"
                            >Html-Css-Toboolist</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/htmlcss-struttura-discord"
                            >Htmlcss-struttura-Discord</a
                        >
                    </li>
                    <li>
                        <a href="https://github.com/Ibra1822/htmlcss-discord"
                            >Htmlcss-Discord</a
                        >
                    </li>
                    <li>
                        <a href="https://github.com/Ibra1822/html-css-boolando"
                            >Html-Css-Boolando</a
                        >
                    </li>
                    <li>
                        <a href="https://github.com/Ibra1822/htmlcss-dropbox"
                            >Htmlcss-DropBox</a
                        >
                    </li>
                    <li>
                        <a href="https://github.com/Ibra1822/html-css-zoom"
                            >Htmlcss-Zoom</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/html-css-float-cards"
                            >Html-Css-Float-Carda</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/htmlcss-responsive-layout"
                            >Htmlcss-Responsive-Layout</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/html-css-resp-wannabe"
                            >Html-Css-Resp-Wannbe</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/html-css-spotifyweb"
                            >Html-css-SpotifyWeb</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://github.com/Ibra1822/html-css-animation-filter"
                            >Html-Css-Animation-Filter</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.second-step {
    display: flex;
    .step-left {
        width: 50%;
        height: 650px;
        padding: 30px;
        img {
            height: 90%;
            margin: 30px;
        }
    }
    .step-right {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        p {
            font-size: 1.5rem;
            color: #2aa8de;
        }
        h2 {
            font-size: 2.6rem;
            color: #0171bb;
        }
        ul {
            list-style: none;
            li {
                margin: 20px;
                a {
                    text-decoration: none;
                    color: #0171bb;
                    padding: 10px 20px;
                    font-size: 1.3rem;

                    &:hover {
                        border: 1px solid #2aa8de;
                        border-radius: 5px;
                    }
                }
            }
        }
    }
}
</style>
