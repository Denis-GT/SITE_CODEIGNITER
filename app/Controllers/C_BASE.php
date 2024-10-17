<?php

namespace App\Controllers;

use PDO;
class C_BASE extends BaseController
{

    protected $helpers = ['html'];

    public function Affiche_Index(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('index.php')
        ;
    }

    public function Affiche_Organisateurs(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/organisateurs.php')
        ;
    }
    public function Affiche_Evenements(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/evenements.php')
        ;
    }
    public function Affiche_Tarifs(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/tarifs.php')
        ;
    }
    public function Affiche_Contact(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/contact.php')
        ;
    }
    public function Affiche_Contact_Inscription(): string
    {
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/contact_inscription.php')
        ;
    }
    public function Affiche_Table_Utilisateurs(): string
    {
        $utilisateurModel = model('M_Utilisateur');

        $session = \Config\Services::session();

        if ($this->request->getPost('delete')) {
            $idUtilisateur = $this->request->getPost('idUtilisateur');
            $result = $utilisateurModel->delete($idUtilisateur);

            if ($result) {
                $session->setFlashdata('success', 'Enregistrement supprimé avec succès.');
            } else {
                $session->setFlashdata('error', 'Erreur lors de la suppression.');
            }
        } elseif ($this->request->getPost('update')) {
            $idUtilisateur = $this->request->getPost('idUtilisateur');
            $data = [
                'nom' => $this->request->getPost('nom'),
                'email' => $this->request->getPost('email'),
                'typeClient' => $this->request->getPost('typeClient'),
            ];

            $result = $utilisateurModel->update($idUtilisateur, $data);
            if ($result) {
                $session->setFlashdata('success', 'Enregistrement modifié avec succès.');
            } else {
                $session->setFlashdata('error', 'Erreur lors de la modification.');
            }
        }
        $data['lesUtilisateurs'] = $utilisateurModel->findAll();
        return view('template/header.php')
            . view('template/menu.php')
            . view('pages/tableUtilisateurs.php', $data);
    }


    public function Connecte_Contact()
    {
        $Session = session();
        $userModel = model('M_Utilisateur');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $password_verif = $data->password; 
            if (password_verify($password, $password_verif)) {
                $Session_data = [
                    'nom' => $data->nom,       
                    'prenom' => $data->prenom, 
                    'email' => $data->email,   
                    'logged_in' => true,
                ];
                $Session->set($Session_data);
                $Session->setFlashdata('msg', 'Connexion réussie.');

                return redirect()->to(base_url(''));
            } else {
                $Session->setFlashdata('msg', 'Le mot de passe est incorrect.');
                echo ("Le mot de passe est incorrect.");
            }
        } else {
            $Session->setFlashdata('msg', 'Aucun utilisateur trouvé pour l\'e-mail fourni.');
            echo ("Aucun utilisateur trouvé pour l'e-mail fourni.");
        }
        return redirect()->to(base_url('contact'));
    }

    public function Inscription_Utilisateur()
    {

        $userModel = model('M_Utilisateur');

        $data = [
            'prenom' => $this->request->getVar('prenom'),
            'nom' => $this->request->getVar('nom'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'typeClient' => $this->request->getVar('radio_inscription')
        ];
        //dd($data);
        // if ($userModel !== null) {
        try {
            $userModel->insert($data);
            return redirect()->to(base_url('contact'));
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        // } else {
        //     echo "<p>Erreur : $ userModel est a null</p>";
        // }
    }

    public function Deconnexion_Utilisateur()
    {
        $Session = session();
        $Session->destroy();

        return redirect()->to(base_url(''));
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return $this->response->setJSON(['status' => 'success']);
    }

    // API =========================================

    public function Connecte_Contact_API()
    {
        $Session = session();
        $userModel = model('M_Utilisateur');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
    
        log_message('info', 'Tentative de connexion avec email: ' . $email);
    
        $data = $userModel->where('email', $email)->first();
    
        if ($data) {
            log_message('info', 'Utilisateur trouvé avec email: ' . $email);
            $password_verif = $data->password;
            if (password_verify($password, $password_verif)) {
                $Session_data = [
                    'nom' => $data->nom,
                    'prenom' => $data->prenom,
                    'email' => $data->email,
                    'logged_in' => true,
                ];
                $Session->set($Session_data);
                log_message('info', 'Connexion réussie pour utilisateur: ' . $email);
    
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Connexion réussie',
                    'Prenom' => $data->prenom,
                    'Email' => $data->email,
                    'Nom' => $data->nom
                ]);
            } else {
                log_message('error', 'Mot de passe incorrect pour utilisateur: ' . $email);
                return $this->response->setJSON(['success' => false, 'message' => 'Mot de passe incorrect']);
            }
        } else {
            log_message('error', 'Utilisateur non trouvé avec email: ' . $email);
            return $this->response->setJSON(['success' => false, 'message' => 'Utilisateur non trouvé']);
        }
    }
    
    public function Affiche_Table_Utilisateurs_API()
    {
        $utilisateurModel = model('M_Utilisateur');
    
        $session = \Config\Services::session();
    
        if ($this->request->getPost('delete')) {
            $idUtilisateur = $this->request->getPost('idUtilisateur');
            $result = $utilisateurModel->delete($idUtilisateur);
    
            if ($result) {
                $session->setFlashdata('success', 'Enregistrement supprimé avec succès.');
            } else {
                $session->setFlashdata('error', 'Erreur lors de la suppression.');
            }
        } elseif ($this->request->getPost('update')) {
            $idUtilisateur = $this->request->getPost('idUtilisateur');
            $data = [
                'nom' => $this->request->getPost('nom'),
                'email' => $this->request->getPost('email'),
                'typeClient' => $this->request->getPost('typeClient'),
            ];
    
            $result = $utilisateurModel->update($idUtilisateur, $data);
            if ($result) {
                $session->setFlashdata('success', 'Enregistrement modifié avec succès.');
            } else {
                $session->setFlashdata('error', 'Erreur lors de la modification.');
            }
        }
    
        $lesUtilisateurs = $utilisateurModel->findAll();
        return $this->response->setJSON($lesUtilisateurs);
    }
}

