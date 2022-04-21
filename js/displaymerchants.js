var merchanttemplate = `


        <div class="box merchant-box column">

            <div class="box y-center" style="height: 20%;padding-left: 10px;">
                <img src="img/merchantprofile.png" alt="" style="height: 50px;width:50px;margin-right:10px;">
                
                <div class="box column x-center">
                    <p style="font-weight: bold;">Store Name</p>
                    <div class="box y-center">
                        <img src="img/loc.png" alt="" style="width:10px;height: 10px;margin-right: 5px;">
                        <p style="font-size: 10px;">San Isidro</p>
                    </div>
                </div>
            </div>

            <div class="box" style="height: 10%;padding-left: 10px;">
                <p style="font-size: 14px;">This is a text description of this merchant.</p>
            </div>

            <div class="box" style="height: 45%">
                <img src="img/sampleimage.png" alt="" style="width: 100%;object-fit: cover;">
            </div>

            <div class="box y-center x-center" style="width:100%;height: 10%;">
                <h4>1.5 Million Followers</h4>
            </div>

            <div class="grey-line"></div>
            <div class="box" style="height: 14%;width: 100%;">
                
                <button class="box y-center" style="width:61%;height:auto;border-style: none;border-radius: 0px 5px 0px 0px;justify-content: space-evenly;">
                    <p style="font-weight: bold;font-size: 12px;">Recommended</p>
                    <img src="img/Leaf Person Icon.png" alt="" style="height: 30px;">
                    <p>144</p>
                </button>
                <div class="vertical-line"></div>
                <button class="box y-center" style="width:40%;height:100%;border-style: none;background-color: #18829C;border-radius: 0px 0px 5px 0px;justify-content: space-evenly;">
                    <img src="img/eye.png" alt="" style="height:20px;">
                    <p style="font-weight: bold;color:white;">View Store</p>
                </button>
            </div>

        </div>

`;



var data =[

    ['img.jpg','storename','short description','location',456,114]
];




for(let i=0; i< 50;i++){
    $('#merchantlist').append(merchanttemplate);
}