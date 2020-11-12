package com.rohit.botiga.botigarohit.entities;

//import org.hibernate.annotations.Fetch;
//import org.hibernate.annotations.FetchMode;
//

import javax.persistence.*;
import java.time.LocalDate;

@Entity
public class Client {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idClient;
    private String nom;
    private String cognoms;

    private LocalDate dataDeNaixament;
    private String password;
    private String mail;

//    @OneToOne(cascade = CascadeType.ALL)
//    private Usuari user;

    @OneToOne(cascade = CascadeType.ALL)
    private Carrito carro;


    public Client(){

    }

    public Client(int idClient) {
        this.idClient = idClient;
    }


    public int getIdClient() {
        return idClient;
    }

    public void setIdClient(int idClient) {
        this.idClient = idClient;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getCognoms() {
        return cognoms;
    }

    public void setCognoms(String cognoms) {
        this.cognoms = cognoms;
    }


    public LocalDate getDataDeNaixament() {
        return dataDeNaixament;
    }

    public void setDataDeNaixament(LocalDate dataDeNaixament) {
        this.dataDeNaixament = dataDeNaixament;
    }

//    public Usuari getUser() {
//        return user;
//    }
//
//    public void setUser(Usuari user) {
//        this.user = user;
//    }

    public Carrito getCarro() {
        return carro;
    }

    public void setCarro(Carrito carro) {
        this.carro = carro;
    }



    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }


    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public void modificarDades(Client cli) {
        this.setNom(cli.getNom());
        this.setCognoms(cli.getCognoms());
        this.setDataDeNaixament(cli.getDataDeNaixament());
        this.setPassword(cli.getPassword());
        this.setMail(cli.getMail());
    }

//    {
//        "nom" : "Faker",
//            "cognoms" : "xd",
//            "dni" : "aaaaaaaaaaaaa",
//            "dataDeNaixament" : "1996-11-11",
//            "login" : "faker",
//            "password" : "faker123"
//    }
}
