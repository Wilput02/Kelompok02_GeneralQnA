                                                                  KELOMPOK 2

                                                               ANGGOTA KELOMPOK :
                                              - Bagus Dwi Prayogo                 (2005551034)
                                              - Willy Putra                       (2005551045)
                                              - Herry Daniel Prasetya Liukae      (2005551052)
                                              - I Gede Carlo Kresnandaka Agastya  (2005551053)


                                                            LAPORAN PROJECT UAS NLP
                                                              QUESTION ANSWERING
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

   Aplikasi Qina qna merupakan aplikasi yang berbasis question answering secara website yang bersifat umum. Aplikasi ini dapat digunakan apabila terdapat seseorang yang ingin mengetahui sesuatu dengan memberi pertanyaan pada aplikasi Qina. Aplikasi ini dibuat dengan menggunakan Laravel dan _language_ model yang dibuat dengan bahasa Python.

   Arsitektur program ini terbagi menjadi 3 bagian yakni, bagian Frontend, Backend, serta Model. Pada bagian Frontend menggunakan 3 bahasa pemrograman yakni, HTML, CSS, dan JQuery, di mana pada HTML menjadi kerangka utama dalam pembuatan tampilan website yang dapat menerima masukkan pengguna berupa pertanyaan dan konteksnya. Pada bagian HTML setiap komponen akan diberikan class ataupun ID sesuai dengan fungsinya masing-masing, keduanya akan diatur kembali dengan CSS sehingga website dapat ditampilkan lebih menarik dan interaktif dan CSS akan mengirimkan hasil pengaturan tampilan pada HTML. Pada HTML masukkan pengguna akan dikirimkan dan disimpan melalui JQuery dan JQuery mengirimkannya melalui AJAX yang nantinya akan dilakukan validasi oleh PHP. Hasil validasi dikirimkan melalui response JSON, sehingga AJAX dapat mengirimkan pesan error apabila terjadi kesalahan dalam masukkan pengguna, namun apabila masukkan pengguna benar maka AJAX akan mengirimkan masukkan tersebut dengan model dan jawaban dari model akan diterima kembali oleh AJAX dan dikirimkan melalui JQuery untuk disimpan dalam variabel jawaban yang dapat ditampilkan dalam halaman HTML.


  Berikut penjelasan mengenai model yang digunakan dalalm projek aplikasi qina qna.
1.  Dataset yang digunakan adalah data Squad yang bersumber dari Huggingface. Data tersebut memiliki 5 _field_ yang terdiri dari id, title, context, question, dan answers. Dataset dibagi menjadi 2, yaitu data untuk train dan data untuk validation. Data train berjumlah 87.599, sedangkan data validation berjumlah 10.570.
  
  
  Cara menjalankan aplikasi adalah dengan beberapa tahap, yaitu:
1.  Pengguna membuka link yang telah disediakan, yaitu qina.000webhost.com <img src="https://user-images.githubusercontent.com/94756544/208234669-4bf19844-7ee0-43a4-9add-0c0a0b32c0f3.jpeg" width="200" height="400" />
2.  Setelah pengguna mengakses link yang disediakan, pengguna dapat melihat tampilan web yang berisi _question_, _context_, dan _answer_.
3.  Pengguna dapat mengisi pertanyaan pada kolom _question_ dan konteks kalimat / paragraf pada kolom _context_.
4.  Setelah itu, pengguna menekan tombol dengan simbol _search_ yang ada di sebelah kolom _question_ dan menunggu jawaban yang sedang diproses oleh sistem.
5.  Jawaban yang dihasilkan merupakan jawaban yang didapatkan dari konteks yang diinput sebelumnya, yang berhubungan dengan pertanyaan.
