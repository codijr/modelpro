<?php
namespace ModelPro\Models;

/**
 * Modelo de projeto.
 */
class Project {
    /** 
     * Id auto-generado pelo banco de dados. Não precisa modificar.
     */
    private $project_id;
    private $codename;
    private $code;
    private $start_date;
    private $end_date;
    /**
     * Status representa o status do projeto dentro do sistema. 
     * Pode ser: 0 - Em andamento; 1 - Finalizado; 2 - Arquivado
     */
    private $status;
    private $client_id;
    private $description;
    private $scope;
    private $links;
    /** 
     * Tags é uma string com valores diferentes separados por "|". 
     * ex: Sistemas|Design|Social Media|Aplicativo. 
     */
    private $tags;

    public function __construct () {}

    /**
     * Get o valor de project_id
     */ 
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Get o valor de codename
     */ 
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * Set o valor de codename
     *
     * @return  self
     */ 
    public function setCodename($codename)
    {
        $this->codename = $codename;

        return $this;
    }

    /**
     * Get o valor de code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set o valor de code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get o valor de start_date
     */ 
    public function getStartDateString()
    {
        return date('d/m/Y', strtotime($this->start_date));
    }

    /**
     * Get o valor de start_date
     */ 
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set o valor de start_date
     *
     * @return  self
     */ 
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get o valor de end_date
     */ 
    public function getEndDateString()
    {
        return date('d/m/Y', strtotime($this->end_date));
    }

    /**
     * Get o valor de end_date
     */ 
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set o valor de end_date
     *
     * @return  self
     */ 
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * Get o valor do status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get a string representada pelo status 
     */ 
    public function getStatusString()
    {
        if ($this->status == 0) {
            return 'Em andamento';
        } elseif ($this->status == 1) {
            return 'Finalizado';
        } elseif ($this->status == 2) {
            return 'Arquivado';
        } else {
            return 'Valor inválido';
        }
    }

    /**
     * Set o valor do status
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get o valor de client_id
     */ 
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set o valor de client_id
     *
     * @return  self
     */ 
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Get o valor de description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set o valor de description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get o valor de scope
     */ 
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set o valor de scope
     *
     * @return  self
     */ 
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get o valor dos links
     */ 
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Get um array dos links
     */ 
    public function getLinkArray()
    {
        return explode(' ', $this->links);
    }

    /**
     * Set o valor dos links
     *
     * @return  self
     */ 
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Set um array dos links a partir dos parametros
     */ 
    public function setLinkArray ($params) {
        $links = '';
        $link_total = $params->getInt('link_count');
        for ($index = 1; $index <= $link_total; $index++) {
            if ($link_total > 1 && $index != 1) {
                $links = $links . ' ';
            }
            $links = $links . $params->get("link$index");
        }
        $this->setLinks($links);
    }

    /**
     * Get o valor das tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set o valor das tags
     * @return  self
     */ 
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

}