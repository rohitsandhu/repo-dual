package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;

@Entity
public class Ressenya {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idRessenya;

    private String textDescripció;
    private int nota;

    @OneToOne(cascade = CascadeType.ALL)
    private Client client;

    public Ressenya(){


    }

    public String getTextDescripció() {
        return textDescripció;
    }

    public void setTextDescripció(String textDescripció) {
        this.textDescripció = textDescripció;
    }

    public int getNota() {
        return nota;
    }

    public void setNota(int nota) {
        this.nota = nota;
    }

    public Client getClient() {
        return client;
    }

    public void setClient(Client client) {
        this.client = client;
    }
}
