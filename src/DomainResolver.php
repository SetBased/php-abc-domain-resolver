<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\DomainResolver;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Interface for DomainResolvers. A DomainResolver resolves the domain (a.k.a the company abbreviation).
 */
interface DomainResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the abbreviation of the company (a.k.a. domain).
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getDomain();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the company (a.k.a. domain).
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function getCmpId();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
