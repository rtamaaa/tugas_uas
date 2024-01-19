UAS Pemrograman 3 
Muhammad Rizky Pratama 
Semester 3


1.	Hasil dari query berdasarkan table diatas adalah salah, karena penulisan querynya salah, akan menampilkan pesan error “tidak ada field yang diinginkan”
Query yang benar
"SELECT mahasiswa.nama AS mahasiswa, sks.jml_sks
FROM mahasiswa, sks"

2.	Hasil dari querynya salah, kesalahannya sama, query salah dan tidak ada field yg diinginkan
Query yang benar
"SELECT mahasiswa.nama AS mahasiswa, matkul.nama AS matkul, sks.jml_sks AS sks
FROM mahasiswa, matkul, sks"


5.	Query untuk menampilkan nya
"SELECT nama AS Nama, alamat, jk AS Jk, status AS Status
FROM mahasiswa"

