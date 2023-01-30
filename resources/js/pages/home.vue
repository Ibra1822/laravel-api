<script>
import FirstStep from "../components/FirstStep.vue";
import Separator from "../components/Separator.vue";
import SecondStep from "../components/SecondStep.vue";
import ThirdStep from "../components/ThirdStep.vue";
import Sep2 from "../components/Sep2.vue";
import FourthStep from "../components/FourthStep.vue";
import FifthStep from "../components/FifthStep.vue";
import SixthStep from "../components/SixthStep.vue";
import seventhStep from "../components/seventhStep.vue";
import EighthStep from "../components/EighthStep.vue";
export default {
    name: "Home",
    components: {
        FirstStep,
        Separator,
        SecondStep,
        ThirdStep,
        Sep2,
        FourthStep,
        FifthStep,
        SixthStep,
        seventhStep,
        EighthStep,
    },
};
</script>
<template>
    <div class="cont-jumbo">
        <h1>Welcome to my WebSite</h1>
    </div>
    <div class="cont-title">
        <h2>Le teconologie che ho utilizzato</h2>
    </div>
    <FirstStep />
    <Separator />
    <SecondStep />
    <Sep2 />
    <ThirdStep />
    <Separator />
    <FourthStep />
    <Sep2 />
    <FifthStep />
    <Separator />
    <SixthStep />
    <Sep2 />
    <seventhStep />
    <separator />
    <EighthStep />
</template>

<style lang="scss" scoped>
.cont-jumbo {
    height: 600px;
    background-color: cadetblue;
    background-image: url("../../images/What-is-Your-Website-Design-Process-Blog-Post-Feature-Image-36119-01-1-1024x537.png");
    background-position: center;
    background-size: cover;
    padding: 45px;
    h1 {
        margin: 0;
        text-align: left;
        font-size: 2.3rem;
        color: #fff;
        text-shadow: 0px 0px 3px #fff;
    }
}

.cont-title {
    height: 100px;
    text-align: center;
    padding: 40px;
    background-color: #f6f6f6;
    h2 {
        color: cadetblue;
        font-size: 2rem;
    }
}
</style>
