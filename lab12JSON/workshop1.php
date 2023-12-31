<html>
<head>
    <script>
        async function getDataFromAPI() {
            let response = await fetch('https://data.go.th/dataset/296f32c6-8c7e-4a54-ade0-0913d35d3168/resource/d132638d-a243-4829-aed8-10ed4fad917f/download/priv_hos.json')
            let rawData = await response.text() 
            let objectData = JSON.parse(rawData)
            let result = document.getElementById('result') 

            for (let i = 0; i < objectData.totalFeatures; i++) {  
                let content = 'โรงพยาบาล ' + objectData.features[i].properties.name + ': ' 
                content += 'เตียง ' + objectData.features[i].properties.num_bed  

                let li = document.createElement('li') 
                li.innerHTML = content 
                result.appendChild(li) 
            }
        }
        getDataFromAPI() // เรียกฟังก์ชัน
    </script>
</head>

<body>
    <h1>โรงพยาบาลเอกชล ในกทม.</h1>

    <ol id="result">
        
    </ol>
</body>

</html>