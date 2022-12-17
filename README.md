                                                                  KELOMPOK 2

                                                               ANGGOTA KELOMPOK :
                                              - Bagus Dwi Prayogo                 (2005551034)
                                              - Willy Putra                       (2005551045)
                                              - Herry Daniel Prasetya Liukae      (2005551052)
                                              - I Gede Carlo Kresnandaka Agastya  (2005551053)


                                                            LAPORAN PROJECT UAS NLP
                                                              QUESTION ANSWERING
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

   Aplikasi qina qna merupakan aplikasi yang berbasis question answering secara website yang bersifat umum. Aplikasi ini dapat digunakan apabila terdapat seseorang yang ingin mengetahui sesuatu dengan memberi pertanyaan pada aplikasi qina. Aplikasi ini menggunakan Laravel.

   Arsitektur program ini terbagi menjadi 3 bagian yakni, bagian Frontend, Backend, serta Model. Pada bagian Frontend menggunakan 3 bahasa pemrograman yakni, HTML, CSS, dan JQuery, di mana pada HTML menjadi kerangka utama dalam pembuatan tampilan website yang dapat menerima masukkan pengguna berupa pertanyaan dan konteksnya. Pada bagian HTML setiap komponen akan diberikan class ataupun ID sesuai dengan fungsinya masing-masing, keduanya akan diatur kembali dengan CSS sehingga website dapat ditampilkan lebih menarik dan interaktif dan CSS akan mengirimkan hasil pengaturan tampilan pada HTML. Pada HTML masukkan pengguna akan dikirimkan dan disimpan melalui JQuery dan JQuery mengirimkannya melalui AJAX yang nantinya akan dilakukan validasi oleh PHP. Hasil validasi dikirimkan melalui response JSON, sehingga AJAX dapat mengirimkan pesan error apabila terjadi kesalahan dalam masukkan pengguna, namun apabila masukkan pengguna benar maka AJAX akan mengirimkan masukkan tersebut dengan model dan jawaban dari model akan diterima kembali oleh AJAX dan dikirimkan melalui JQuery untuk disimpan dalam variabel jawaban yang dapat ditampilkan dalam halaman HTML.

    
  Cara menjalankan aplikasi adalah dengan beberapa tahap, yaitu:
1.  
