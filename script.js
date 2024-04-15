const cautraloi = document.querySelectorAll('.cautraloi');
const submitBtn = document.getElementById('submit');
const quiz = document.getElementById('question');
let socaudung = 0;
let cauhoi_hientai = 0;
load_cauhoi();

function load_cauhoi() {
    remove_answer();
    fetch('http://localhost:8012/Restfull_api/api/question/read.php')
        .then(res => res.json())
        .then(data => {
            document.getElementById('tongsocauhoi').value = data.question.length;


            const cauhoi = document.getElementById('title');

            const a_cautraloi = document.getElementById('a_cautraloi');
            const b_cautraloi = document.getElementById('b_cautraloi');
            const c_cautraloi = document.getElementById('c_cautraloi');
            const d_cautraloi = document.getElementById('d_cautraloi');
            const get_cauhoi = data.question[cauhoi_hientai];

            cauhoi.innerText = get_cauhoi.title;
            a_cautraloi.innerText = get_cauhoi.cau_a;
            b_cautraloi.innerText = get_cauhoi.cau_b;

            if (get_cauhoi.cau_c != null) {
                document.getElementById('cau_c').classList.remove('hienthicautraloi');
                c_cautraloi.innerText = get_cauhoi.cau_c;
            } else {
                document.getElementById('cau_c').classList.add('hienthicautraloi');
            }

            if (get_cauhoi.cau_d != null) {
                document.getElementById('cau_d').classList.remove('hienthicautraloi');
                d_cautraloi.innerText = get_cauhoi.cau_d;
            } else {
                document.getElementById('cau_d').classList.add('hienthicautraloi');
            }
            document.getElementById('caudung').value = get_cauhoi.cau_dung;
            // alert(document.getElementById('caudung').value);
        })
        .catch(error => console.log(error));
}

function get_answer() {
    let answer = undefined;
    cautraloi.forEach((cautraloi) => {
        if (cautraloi.checked) {
            answer = cautraloi.id;
        }
    })
    return answer;
}

//bỏ câu trả lời
function remove_answer() {
    cautraloi.forEach((cautraloi) => {
        cautraloi.checked = false;
    });
}

submitBtn.addEventListener("click", () => {
    const answer = get_answer();
    console.log(answer);

    if (answer) {
        if (answer === document.getElementById('caudung').value) {
            socaudung++;
            console.log(socaudung);
        }
    };

    // Xóa tích chọn của các phần tử input
    remove_answer();

    cauhoi_hientai++;

    if (cauhoi_hientai < document.getElementById('tongsocauhoi').value) {
        load_cauhoi();
    } else {
        const tongsocauhoi = document.getElementById('tongsocauhoi').value;
        quiz.innerHTML = `<h2>Bạn đã đúng ${socaudung}/${tongsocauhoi} câu hỏi</h2>
        <button onClick="location.reload()" id="submit" class="btn btn-success" style="font-family: 'Noto Sans', sans-serif;">Làm lại bài</button>`;
    }
});