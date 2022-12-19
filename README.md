                                                                  KELOMPOK 2

                                                               ANGGOTA KELOMPOK :
                                              - Bagus Dwi Prayogo                 (2005551034)
                                              - Willy Putra                       (2005551045)
                                              - Herry Daniel Prasetya Liukae      (2005551052)
                                              - I Gede Carlo Kresnandaka Agastya  (2005551053)


                                                            LAPORAN PROJECT UAS PBA
                                                              QUESTION ANSWERING
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

   Aplikasi Qina merupakan aplikasi yang berbasis _question answering_ secara _website_ yang bersifat umum. Aplikasi ini dapat digunakan apabila terdapat seseorang yang ingin mengetahui sesuatu dengan memberi pertanyaan pada aplikasi Qina. Aplikasi ini dibuat dengan menggunakan Laravel dan _language_ model yang dibuat dengan bahasa Python.

Berikut merupakan gambaran dari arsitektur program yang dibuat.
<img width="689" alt="image" src="https://user-images.githubusercontent.com/74575801/208240989-2236d7d5-61cd-49f7-894b-6d1392bfb91d.png">

   Arsitektur program ini terbagi menjadi 3 bagian yakni, bagian Frontend, Backend, serta Model. Pada bagian Frontend menggunakan 3 bahasa pemrograman yakni, HTML, CSS, dan JQuery, di mana pada HTML menjadi kerangka utama dalam pembuatan tampilan website yang dapat menerima masukkan pengguna berupa pertanyaan dan konteksnya. Pada bagian HTML setiap komponen akan diberikan class ataupun ID sesuai dengan fungsinya masing-masing, keduanya akan diatur kembali dengan CSS sehingga website dapat ditampilkan lebih menarik dan interaktif dan CSS akan mengirimkan hasil pengaturan tampilan pada HTML. Pada HTML masukkan pengguna akan dikirimkan dan disimpan melalui JQuery dan JQuery mengirimkannya melalui AJAX yang nantinya akan dilakukan validasi oleh PHP. Hasil validasi dikirimkan melalui response JSON, sehingga AJAX dapat mengirimkan pesan error apabila terjadi kesalahan dalam masukkan pengguna, namun apabila masukkan pengguna benar maka AJAX akan mengirimkan masukkan tersebut dengan model dan jawaban dari model akan diterima kembali oleh AJAX dan dikirimkan melalui JQuery untuk disimpan dalam variabel jawaban yang dapat ditampilkan dalam halaman HTML.

  Berikut penjelasan mengenai model yang digunakan dalam projek aplikasi Qina.
1.  Dataset yang digunakan adalah data Squad yang bersumber dari Huggingface. Data tersebut memiliki 5 _field_ atau kelas yang terdiri dari id, title, context, question, dan answers. Dataset dibagi menjadi 2, yaitu data untuk train dan data untuk validation. Data train berjumlah 87.599, sedangkan data validation berjumlah 10.570.
2.  Algoritma Machine Learning yang digunakan untuk pembuatan _question answering_ adalah DistilBERT. DistilBERT adalah _language_ model yang berupa hasil distilasi dari model BERT. DistilBERT memiliki parameter 40% lebih sedikit daripada model BERT, kecepatan 60% lebih cepat, serta memiliki 97% kinerja dari model BERT. DistilBERT memiliki arsitektur yang sama dengan BERT, tetapi dalam _token-type-embeddings_ dan _pooler_ dihapus, sementara itu jumlah lapisan dikurangi dengan faktor dua. DistilBERT disuling pada _batch_ yang sangat besar dengan memanfaatkan akumulasi gradien (hingga 4000 contoh per _batch_) menggunakan _masking_ dinamis dan tanpa tujuan prediksi kalimat berikutnya. Proses pelatihan DistilBERT memiliki _corpus_ yang sama dengan model BERT, yaitu gabungan dari Wikipedia Inggris dengan Toronto Book Corpus. Penjelasan lebih detail mengenai DistilBERT dapat dibaca pada link https://arxiv.org/pdf/1910.01108.pdf.
3.  Tahapan _preprocessing_ pada model ini adalah dengan menggunakan AutoTokenizer dari _library_ Transformer yang berasal dari Huggingface.
4.  Fine-Tuning merupakan tahapan _training model_, di mana dilakukan pelatihan pada dataset yang ada. Fine-Tuning biasanya digunakan untuk melatih suatu _pre-trained language_ model yang memiliki dataset yang banyak. Dataset yang dilakukan fine-tuning berjumlah 88.524. Hasil _training_ menunjukkan 3 epoch yang memiliki _training loss_ yang semakin menurun dengan bertambahnya epoch.
5.  Tahapan _evaluation_, di mana tahap evaluasi merupakan tahapan yang sangat penting dalam NLP. Tahap evaluasi dilakukan untuk memahami kinerja dari model yang dibuat. Tahapan ini menggunakan dataset dari data validation, di mana dilakukan pengujian prediksi hasil yang diperoleh. Hasil menunjukkan nilai dari exact match dan f1 score berupa 77,1 dan 85,5. Testing model dilakukan pada HuggingFace, dikarenakan dapat mempermudah model dalam melakukan integrasi dengan Backend berikut tautan dari HuggingFace
https://huggingface.co/BagusDP/distilbert-base-uncased-finetuned-squad

<img width="180" alt="image" src="https://user-images.githubusercontent.com/94756544/208237512-9bf30a82-a87c-4b03-81d3-5e65c196ea2b.png"> <img width="321" alt="image" src="https://user-images.githubusercontent.com/94756544/208237744-f23adf9e-e42a-42e5-a98e-e9745951336a.png">
  
  Cara menjalankan aplikasi adalah dengan beberapa tahap, yaitu:
1.  Pengguna membuka link yang telah disediakan, yaitu qina.000webhost.com
2.  Setelah pengguna mengakses link yang disediakan, pengguna dapat melihat tampilan web yang berisi _question_, _context_, dan _answer_.
3.  Pengguna dapat mengisi pertanyaan pada kolom _question_ dan konteks kalimat / paragraf pada kolom _context_.
4.  Setelah itu, pengguna menekan tombol dengan simbol _search_ yang ada di sebelah kolom _question_ dan menunggu jawaban yang sedang diproses oleh sistem.
5.  Jawaban yang dihasilkan merupakan jawaban yang didapatkan dari konteks yang diinput sebelumnya, yang berhubungan dengan pertanyaan.
<img width="945" alt="image" src="https://user-images.githubusercontent.com/74575801/208241147-9fb18838-db06-4027-8047-4ca644337d56.png">
<img width="943" alt="image" src="https://user-images.githubusercontent.com/74575801/208241171-678cffe0-6a51-4d99-8ba0-dfd0b2e6ecdd.png">

